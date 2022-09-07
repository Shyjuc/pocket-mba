import './App.css';
import Navbar from './components/Navbar';
import Home from './components/pages/Home';
import {BrowserRouter as Router, Routes, Route} from 'react-router-dom'
import Commune from './components/pages/Commune';
import Docs from './components/pages/Docs';
import Download from './components/pages/Download';
import Consult from './components/pages/Consult';
import BrandKit from './components/pages/BrandKit';
import Intro from './components/pages/Intro';
import Problem from './components/pages/Problem';
import Solution from './components/pages/Solution';


function App() {
  return (
    <Router>
      <Navbar />
      <Routes>
        <Route path="/" exact element={<Home />} />
        <Route path="/brand-package" element={<BrandKit />} />
        <Route path="/community" element={<Commune />} />
        <Route path="/consult" element={<Consult />} />
        <Route path="/docs" element={<Docs />} />
        <Route path="/download" element={<Download />} />
        <Route path="/how-to-design-intro-slide" element={<Intro />} />
        <Route path="/how-to-design-problem-slide" element={<Problem />} />
        <Route path="/how-to-design-solution-slide" element={<Solution />} />
      </Routes>
    </Router>
  );
}

export default App;