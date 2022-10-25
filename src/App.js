import './App.css';
import Navbar from './components/Navbar';
import Home from './components/pages/Home';
import {BrowserRouter as Router, Routes, Route} from 'react-router-dom'
import Commune from './components/pages/Commune';
import Docs from './components/pages/Docs';
import Download from './components/pages/Download';
import Consult from './components/pages/Consult';
import Intro from './components/pages/Intro';
import Problem from './components/pages/Problem';
import Solution from './components/pages/Solution';
import Traction from './components/pages/Traction';
import Market from './components/pages/Market';
import Bmodel from './components/pages/Bmodel';
import Competition from './components/pages/Competition';
import Investment from './components/pages/Investment';
import Gotomarket from './components/pages/Gotomarket';
import Keymetrics from './components/pages/Keymetrics';


function App() {
  return (
    <Router>
      <Navbar />
      <Routes>
        <Route path="/" exact element={<Home />} />
        <Route path="/community" element={<Commune />} />
        <Route path="/consult" element={<Consult />} />
        <Route path="/docs" element={<Docs />} />
        <Route path="/download" element={<Download />} />
        <Route path="/how-to-design-intro-slide" element={<Intro />} />
        <Route path="/how-to-design-problem-slide" element={<Problem />} />
        <Route path="/how-to-design-solution-slide" element={<Solution />} />
        <Route path="/how-to-speak-about-traction" element={<Traction />} />
        <Route path="/how-to-explain-your-market" element={<Market />} />
        <Route path="/what-is-your-business-model" element={<Bmodel />} />
        <Route path="/how-to-describe-competition-in-your-market" element={<Competition />} />
        <Route path="/how-to-make-a-deal-in-pitchdeck" element={<Investment />} />
        <Route path="/go-to-market-strategy" element={<Gotomarket />} />
        <Route path="/startup-key-metrics" element={<Keymetrics />} />
      </Routes>
    </Router>
  );
}

export default App;