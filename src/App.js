import './App.css';
import Navbar from './components/Navbar';
import Home from './components/pages/Home';
import {BrowserRouter as Router, Routes, Route} from 'react-router-dom'
import Founder from './components/pages/Founder';


function App() {
  return (
    <Router>
      <Navbar />
      <Routes>
        <Route path="/" exact element={<Home />} />
        <Route path="/founder-kit" element={<Founder />} />
      </Routes>
    </Router>
  );
}

export default App;